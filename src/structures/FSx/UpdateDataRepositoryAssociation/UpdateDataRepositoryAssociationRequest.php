<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string $ClientRequestToken
 * @property int $ImportedFileChunkSize
 * @property Shapes\S3DataRepositoryConfiguration $S3
 */
class UpdateDataRepositoryAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ClientRequestToken?: string,
     *     ImportedFileChunkSize?: int,
     *     S3?: Shapes\S3DataRepositoryConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
