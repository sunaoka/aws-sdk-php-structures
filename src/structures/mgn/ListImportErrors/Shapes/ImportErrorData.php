<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountID
 * @property string|null $applicationID
 * @property string|null $ec2LaunchTemplateID
 * @property string|null $rawError
 * @property int<0, max>|null $rowNumber
 * @property string|null $sourceServerID
 * @property string|null $waveID
 */
class ImportErrorData extends Shape
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     applicationID?: string|null,
     *     ec2LaunchTemplateID?: string|null,
     *     rawError?: string|null,
     *     rowNumber?: int<0, max>|null,
     *     sourceServerID?: string|null,
     *     waveID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
