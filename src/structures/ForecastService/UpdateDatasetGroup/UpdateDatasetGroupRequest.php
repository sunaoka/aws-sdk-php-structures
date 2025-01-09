<?php

namespace Sunaoka\Aws\Structures\ForecastService\UpdateDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetGroupArn
 * @property list<string> $DatasetArns
 */
class UpdateDatasetGroupRequest extends Request
{
    /**
     * @param array{
     *     DatasetGroupArn: string,
     *     DatasetArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
