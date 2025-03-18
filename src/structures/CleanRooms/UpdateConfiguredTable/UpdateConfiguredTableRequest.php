<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 * @property string|null $name
 * @property string|null $description
 * @property 'DIRECT_QUERY'|'DIRECT_JOB'|'MULTIPLE'|null $analysisMethod
 * @property list<'DIRECT_QUERY'|'DIRECT_JOB'>|null $selectedAnalysisMethods
 */
class UpdateConfiguredTableRequest extends Request
{
    /**
     * @param array{
     *     configuredTableIdentifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     analysisMethod?: 'DIRECT_QUERY'|'DIRECT_JOB'|'MULTIPLE'|null,
     *     selectedAnalysisMethods?: list<'DIRECT_QUERY'|'DIRECT_JOB'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
