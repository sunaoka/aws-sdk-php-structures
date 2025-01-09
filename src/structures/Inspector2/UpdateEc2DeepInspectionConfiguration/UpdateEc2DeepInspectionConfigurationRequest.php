<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $activateDeepInspection
 * @property list<string> $packagePaths
 */
class UpdateEc2DeepInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     activateDeepInspection?: bool,
     *     packagePaths?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
