<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchCreateVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\VariableEntry> $variableEntries
 * @property list<Shapes\Tag> $tags
 */
class BatchCreateVariableRequest extends Request
{
    /**
     * @param array{
     *     variableEntries: list<Shapes\VariableEntry>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
