<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property int $revisionNumber
 */
class GetFlowTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     revisionNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
