<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateRepositoryLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionArn
 * @property string $EncryptionKeyArn
 * @property string $RepositoryLinkId
 */
class UpdateRepositoryLinkRequest extends Request
{
    /**
     * @param array{
     *     ConnectionArn?: string,
     *     EncryptionKeyArn?: string,
     *     RepositoryLinkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
