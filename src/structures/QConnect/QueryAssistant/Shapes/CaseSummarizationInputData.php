<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseArn
 */
class CaseSummarizationInputData extends Shape
{
    /**
     * @param array{caseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
