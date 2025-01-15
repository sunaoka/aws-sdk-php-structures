<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<CreateAssessmentFrameworkControl>|null $controls
 */
class CreateAssessmentFrameworkControlSet extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     controls?: list<CreateAssessmentFrameworkControl>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
