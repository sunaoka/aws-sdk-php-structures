<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Author
 * @property string $CreationTime
 * @property string $Description
 * @property string $HomePageUrl
 * @property list<string> $Labels
 * @property string $Name
 * @property string $SpdxLicenseId
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Author: string,
     *     CreationTime?: string,
     *     Description: string,
     *     HomePageUrl?: string,
     *     Labels?: list<string>,
     *     Name: string,
     *     SpdxLicenseId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
