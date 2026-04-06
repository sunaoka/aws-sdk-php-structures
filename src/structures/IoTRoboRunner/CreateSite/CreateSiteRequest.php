<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string $countryCode
 * @property string|null $description
 */
class CreateSiteRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     countryCode: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
