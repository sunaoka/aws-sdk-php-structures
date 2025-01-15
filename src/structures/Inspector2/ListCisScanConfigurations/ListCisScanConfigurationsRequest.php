<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListCisScanConfigurationsFilterCriteria|null $filterCriteria
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SCAN_NAME'|'SCAN_CONFIGURATION_ARN'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 */
class ListCisScanConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\ListCisScanConfigurationsFilterCriteria|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'SCAN_NAME'|'SCAN_CONFIGURATION_ARN'|null,
     *     sortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
