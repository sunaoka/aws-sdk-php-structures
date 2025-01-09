<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $action
 * @property array<string, string> $condition
 * @property bool $isPublic
 * @property array<string, string> $principal
 * @property list<FindingSource> $sources
 * @property 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE' $resourceControlPolicyRestriction
 */
class ExternalAccessDetails extends Shape
{
    /**
     * @param array{
     *     action?: list<string>,
     *     condition: array<string, string>,
     *     isPublic?: bool,
     *     principal?: array<string, string>,
     *     sources?: list<FindingSource>,
     *     resourceControlPolicyRestriction?: 'APPLICABLE'|'FAILED_TO_EVALUATE_RCP'|'NOT_APPLICABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
