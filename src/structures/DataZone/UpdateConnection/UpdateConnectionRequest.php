<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsLocation $awsLocation
 * @property string $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property Shapes\ConnectionPropertiesPatch $props
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     awsLocation?: Shapes\AwsLocation,
     *     description?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     props?: Shapes\ConnectionPropertiesPatch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
