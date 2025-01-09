<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateAppInstanceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Metadata?: string,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
