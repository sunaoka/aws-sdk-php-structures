<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $submissionId
 * @property 'edit'|'delete'|'add' $mutationType
 */
class SubmissionMutation extends Shape
{
    /**
     * @param array{
     *     submissionId: string,
     *     mutationType: 'edit'|'delete'|'add'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
