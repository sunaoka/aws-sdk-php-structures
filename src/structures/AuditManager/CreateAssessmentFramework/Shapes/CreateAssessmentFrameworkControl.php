<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class CreateAssessmentFrameworkControl extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
