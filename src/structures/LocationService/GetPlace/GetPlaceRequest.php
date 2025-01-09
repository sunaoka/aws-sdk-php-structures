<?php

namespace Sunaoka\Aws\Structures\LocationService\GetPlace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexName
 * @property string $PlaceId
 * @property string $Language
 * @property string $Key
 */
class GetPlaceRequest extends Request
{
    /**
     * @param array{
     *     IndexName: string,
     *     PlaceId: string,
     *     Language?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
