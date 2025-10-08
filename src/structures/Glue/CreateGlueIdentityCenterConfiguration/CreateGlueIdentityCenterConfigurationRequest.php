<?php

namespace Sunaoka\Aws\Structures\Glue\CreateGlueIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property list<string>|null $Scopes
 */
class CreateGlueIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     Scopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
