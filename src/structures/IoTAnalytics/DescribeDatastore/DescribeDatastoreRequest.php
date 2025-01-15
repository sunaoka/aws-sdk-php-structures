<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 * @property bool|null $includeStatistics
 */
class DescribeDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName: string,
     *     includeStatistics?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
