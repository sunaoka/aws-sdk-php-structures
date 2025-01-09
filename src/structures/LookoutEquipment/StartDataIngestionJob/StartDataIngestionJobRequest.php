<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartDataIngestionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property Shapes\IngestionInputConfiguration $IngestionInputConfiguration
 * @property string $RoleArn
 * @property string $ClientToken
 */
class StartDataIngestionJobRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     IngestionInputConfiguration: Shapes\IngestionInputConfiguration,
     *     RoleArn: string,
     *     ClientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
