<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Severity
 * @property string|null $Feature
 * @property string|null $FullDescription
 * @property string|null $Remediation
 * @property list<string>|null $LearnMoreLinks
 */
class FindingTypeDocumentation extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Severity?: string|null,
     *     Feature?: string|null,
     *     FullDescription?: string|null,
     *     Remediation?: string|null,
     *     LearnMoreLinks?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
