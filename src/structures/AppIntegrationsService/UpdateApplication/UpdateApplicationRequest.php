<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property Shapes\ApplicationSourceConfig $ApplicationSourceConfig
 * @property list<Shapes\Subscription> $Subscriptions
 * @property list<Shapes\Publication> $Publications
 * @property list<string> $Permissions
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string,
     *     Description?: string,
     *     ApplicationSourceConfig?: Shapes\ApplicationSourceConfig,
     *     Subscriptions?: list<Shapes\Subscription>,
     *     Publications?: list<Shapes\Publication>,
     *     Permissions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
