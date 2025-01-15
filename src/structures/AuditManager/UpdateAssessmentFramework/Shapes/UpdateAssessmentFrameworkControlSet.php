<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFramework\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string $name
 * @property list<CreateAssessmentFrameworkControl> $controls
 */
class UpdateAssessmentFrameworkControlSet extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name: string,
     *     controls: list<CreateAssessmentFrameworkControl>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
