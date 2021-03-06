<?php

/**
 * This file is part of the FOS\CommentBundle.
 *
 * (c) Thibault Duplessis <thibault.duplessis@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\Model;

use FOS\UserBundle\Model\UserInterface;

/**
 * A signed comment is bound to a FOS\UserBundle User model.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface SignedCommentInterface extends CommentInterface
{
    /**
     * Sets the author of the Comment
     *
     * @param UserInterface $user
     */
    function setAuthor(UserInterface $author);

    /**
     * Gets the author of the Comment
     *
     * @return UserInterface
     */
    function getAuthor();
}
