<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $description
 * @property Shapes\AwsLocation|null $awsLocation
 * @property Shapes\ConnectionPropertiesPatch|null $props
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     description?: string|null,
     *     awsLocation?: Shapes\AwsLocation|null,
     *     props?: Shapes\ConnectionPropertiesPatch|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
