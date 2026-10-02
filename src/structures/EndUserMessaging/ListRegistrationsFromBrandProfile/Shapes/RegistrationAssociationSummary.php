<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListRegistrationsFromBrandProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registrationId
 * @property string $registrationType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $smartMatchUsed
 */
class RegistrationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     registrationId: string,
     *     registrationType: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     smartMatchUsed: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
