<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateFileSystemAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemAssociationARN
 * @property string|null $UserName
 * @property string|null $Password
 * @property string|null $AuditDestinationARN
 * @property Shapes\CacheAttributes|null $CacheAttributes
 */
class UpdateFileSystemAssociationRequest extends Request
{
    /**
     * @param array{
     *     FileSystemAssociationARN: string,
     *     UserName?: string|null,
     *     Password?: string|null,
     *     AuditDestinationARN?: string|null,
     *     CacheAttributes?: Shapes\CacheAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
