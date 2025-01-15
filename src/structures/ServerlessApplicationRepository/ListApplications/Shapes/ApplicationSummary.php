<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Author
 * @property string|null $CreationTime
 * @property string $Description
 * @property string|null $HomePageUrl
 * @property list<string>|null $Labels
 * @property string $Name
 * @property string|null $SpdxLicenseId
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Author: string,
     *     CreationTime?: string|null,
     *     Description: string,
     *     HomePageUrl?: string|null,
     *     Labels?: list<string>|null,
     *     Name: string,
     *     SpdxLicenseId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
