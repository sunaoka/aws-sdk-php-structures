<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property Shapes\DatasetSchema $DatasetSchema
 * @property string $ServerSideKmsKeyId
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     DatasetSchema?: Shapes\DatasetSchema,
     *     ServerSideKmsKeyId?: string,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
