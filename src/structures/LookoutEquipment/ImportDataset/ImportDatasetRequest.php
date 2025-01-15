<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDatasetArn
 * @property string|null $DatasetName
 * @property string $ClientToken
 * @property string|null $ServerSideKmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportDatasetRequest extends Request
{
    /**
     * @param array{
     *     SourceDatasetArn: string,
     *     DatasetName?: string|null,
     *     ClientToken: string,
     *     ServerSideKmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
