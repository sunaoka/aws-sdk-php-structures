<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutDataSetRefreshProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DataSetId
 * @property Shapes\DataSetRefreshProperties $DataSetRefreshProperties
 */
class PutDataSetRefreshPropertiesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DataSetId: string,
     *     DataSetRefreshProperties: Shapes\DataSetRefreshProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
