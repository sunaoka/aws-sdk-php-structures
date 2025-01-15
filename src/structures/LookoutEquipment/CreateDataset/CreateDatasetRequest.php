<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property Shapes\DatasetSchema|null $DatasetSchema
 * @property string|null $ServerSideKmsKeyId
 * @property string $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     DatasetSchema?: Shapes\DatasetSchema|null,
     *     ServerSideKmsKeyId?: string|null,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
