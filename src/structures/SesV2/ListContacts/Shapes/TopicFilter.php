<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property bool $UseDefaultIfPreferenceUnavailable
 */
class TopicFilter extends Shape
{
    /**
     * @param array{
     *     TopicName?: string,
     *     UseDefaultIfPreferenceUnavailable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
