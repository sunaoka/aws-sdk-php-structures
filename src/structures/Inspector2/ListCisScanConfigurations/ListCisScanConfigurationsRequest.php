<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListCisScanConfigurationsFilterCriteria|null $filterCriteria
 * @property 'SCAN_NAME'|'SCAN_CONFIGURATION_ARN'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCisScanConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\ListCisScanConfigurationsFilterCriteria|null,
     *     sortBy?: 'SCAN_NAME'|'SCAN_CONFIGURATION_ARN'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
