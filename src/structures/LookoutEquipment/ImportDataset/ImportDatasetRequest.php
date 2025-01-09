<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDatasetArn
 * @property string $DatasetName
 * @property string $ClientToken
 * @property string $ServerSideKmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class ImportDatasetRequest extends Request
{
    /**
     * @param array{
     *     SourceDatasetArn: string,
     *     DatasetName?: string,
     *     ClientToken: string,
     *     ServerSideKmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
