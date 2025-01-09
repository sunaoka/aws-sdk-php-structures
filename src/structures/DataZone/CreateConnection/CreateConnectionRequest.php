<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsLocation $awsLocation
 * @property string $clientToken
 * @property string $description
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $name
 * @property Shapes\ConnectionPropertiesInput $props
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     awsLocation?: Shapes\AwsLocation,
     *     clientToken?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     name: string,
     *     props?: Shapes\ConnectionPropertiesInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
