<?php

namespace Sunaoka\Aws\Structures\Ssm\LabelParameterVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $ParameterVersion
 * @property list<string> $Labels
 */
class LabelParameterVersionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ParameterVersion?: int,
     *     Labels: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
