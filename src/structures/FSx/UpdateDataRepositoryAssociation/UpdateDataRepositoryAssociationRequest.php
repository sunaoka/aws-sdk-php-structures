<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string|null $ClientRequestToken
 * @property int<1, 512000>|null $ImportedFileChunkSize
 * @property Shapes\S3DataRepositoryConfiguration|null $S3
 */
class UpdateDataRepositoryAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ClientRequestToken?: string|null,
     *     ImportedFileChunkSize?: int<1, 512000>|null,
     *     S3?: Shapes\S3DataRepositoryConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
