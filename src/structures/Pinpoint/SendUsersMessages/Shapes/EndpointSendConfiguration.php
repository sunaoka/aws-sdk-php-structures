<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BodyOverride
 * @property array<string, string> $Context
 * @property string $RawContent
 * @property array<string, list<string>> $Substitutions
 * @property string $TitleOverride
 */
class EndpointSendConfiguration extends Shape
{
    /**
     * @param array{
     *     BodyOverride?: string,
     *     Context?: array<string, string>,
     *     RawContent?: string,
     *     Substitutions?: array<string, list<string>>,
     *     TitleOverride?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
