<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateRepositoryLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConnectionArn
 * @property string|null $EncryptionKeyArn
 * @property string $RepositoryLinkId
 */
class UpdateRepositoryLinkRequest extends Request
{
    /**
     * @param array{
     *     ConnectionArn?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     RepositoryLinkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
