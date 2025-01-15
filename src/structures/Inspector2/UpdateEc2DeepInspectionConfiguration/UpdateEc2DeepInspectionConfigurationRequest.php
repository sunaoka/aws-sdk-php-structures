<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $activateDeepInspection
 * @property list<string>|null $packagePaths
 */
class UpdateEc2DeepInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     activateDeepInspection?: bool|null,
     *     packagePaths?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
