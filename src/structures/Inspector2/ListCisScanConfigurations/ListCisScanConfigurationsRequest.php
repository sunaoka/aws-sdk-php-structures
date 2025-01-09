<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListCisScanConfigurationsFilterCriteria $filterCriteria
 * @property int $maxResults
 * @property string $nextToken
 * @property 'SCAN_NAME'|'SCAN_CONFIGURATION_ARN' $sortBy
 * @property 'ASC'|'DESC' $sortOrder
 */
class ListCisScanConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\ListCisScanConfigurationsFilterCriteria,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: 'SCAN_NAME'|'SCAN_CONFIGURATION_ARN',
     *     sortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
