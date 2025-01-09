<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountID
 * @property string $applicationID
 * @property string $ec2LaunchTemplateID
 * @property string $rawError
 * @property int $rowNumber
 * @property string $sourceServerID
 * @property string $waveID
 */
class ImportErrorData extends Shape
{
    /**
     * @param array{
     *     accountID?: string,
     *     applicationID?: string,
     *     ec2LaunchTemplateID?: string,
     *     rawError?: string,
     *     rowNumber?: int,
     *     sourceServerID?: string,
     *     waveID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
