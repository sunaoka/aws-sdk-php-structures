<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionRequestDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string $formName
 * @property string|null $typeName
 * @property string|null $typeRevision
 */
class FormOutput extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     formName: string,
     *     typeName?: string|null,
     *     typeRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
