<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerID
 * @property string|null $applicationID
 * @property string|null $waveID
 * @property string|null $ec2LaunchTemplateID
 * @property int<0, max>|null $rowNumber
 * @property string|null $rawError
 * @property string|null $accountID
 */
class ImportErrorData extends Shape
{
    /**
     * @param array{
     *     sourceServerID?: string|null,
     *     applicationID?: string|null,
     *     waveID?: string|null,
     *     ec2LaunchTemplateID?: string|null,
     *     rowNumber?: int<0, max>|null,
     *     rawError?: string|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
