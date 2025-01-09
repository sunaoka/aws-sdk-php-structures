<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateSampleFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $FindingTypes
 */
class CreateSampleFindingsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingTypes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
