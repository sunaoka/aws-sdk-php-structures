<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\CreateRepositoryLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionArn
 * @property string $OwnerId
 * @property string $RepositoryName
 * @property string $EncryptionKeyArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateRepositoryLinkRequest extends Request
{
    /**
     * @param array{
     *     ConnectionArn: string,
     *     OwnerId: string,
     *     RepositoryName: string,
     *     EncryptionKeyArn?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
