<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyPreviewJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCP' $jobType
 * @property string $targetId
 * @property list<string> $policyDocumentsList
 */
class PolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     jobType: 'SCP',
     *     targetId: string,
     *     policyDocumentsList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
