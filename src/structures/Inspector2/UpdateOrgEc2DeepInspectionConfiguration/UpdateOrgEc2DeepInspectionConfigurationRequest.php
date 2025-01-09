<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateOrgEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $orgPackagePaths
 */
class UpdateOrgEc2DeepInspectionConfigurationRequest extends Request
{
    /**
     * @param array{orgPackagePaths: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
