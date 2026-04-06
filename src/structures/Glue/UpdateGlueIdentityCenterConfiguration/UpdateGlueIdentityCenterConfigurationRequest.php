<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateGlueIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Scopes
 * @property bool|null $UserBackgroundSessionsEnabled
 */
class UpdateGlueIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Scopes?: list<string>|null,
     *     UserBackgroundSessionsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
