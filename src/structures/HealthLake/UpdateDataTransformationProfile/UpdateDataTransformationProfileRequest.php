<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateDataTransformationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property array<string, string> $ProfileMapping
 * @property string|null $ChangeDescription
 */
class UpdateDataTransformationProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ProfileMapping: array<string, string>,
     *     ChangeDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
