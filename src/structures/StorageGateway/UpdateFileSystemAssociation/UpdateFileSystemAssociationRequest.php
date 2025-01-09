<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateFileSystemAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemAssociationARN
 * @property string $UserName
 * @property string $Password
 * @property string $AuditDestinationARN
 * @property Shapes\CacheAttributes $CacheAttributes
 */
class UpdateFileSystemAssociationRequest extends Request
{
    /**
     * @param array{
     *     FileSystemAssociationARN: string,
     *     UserName?: string,
     *     Password?: string,
     *     AuditDestinationARN?: string,
     *     CacheAttributes?: Shapes\CacheAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
