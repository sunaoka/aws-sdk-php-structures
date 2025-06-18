<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $action
 * @property array<string, string> $condition
 * @property bool|null $isPublic
 * @property array<string, string>|null $principal
 * @property list<FindingSource>|null $sources
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'|'APPLIED'|null $resourceControlPolicyRestriction
 */
class ExternalAccessDetails extends Shape
{
    /**
     * @param array{
     *     action?: list<string>|null,
     *     condition: array<string, string>,
     *     isPublic?: bool|null,
     *     principal?: array<string, string>|null,
     *     sources?: list<FindingSource>|null,
     *     resourceControlPolicyRestriction?: 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'|'APPLIED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
