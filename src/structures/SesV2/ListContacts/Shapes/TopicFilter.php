<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicName
 * @property bool|null $UseDefaultIfPreferenceUnavailable
 */
class TopicFilter extends Shape
{
    /**
     * @param array{
     *     TopicName?: string|null,
     *     UseDefaultIfPreferenceUnavailable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
