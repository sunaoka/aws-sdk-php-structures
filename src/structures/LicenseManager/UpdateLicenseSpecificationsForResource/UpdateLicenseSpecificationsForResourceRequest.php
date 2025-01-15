<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseSpecificationsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\LicenseSpecification>|null $AddLicenseSpecifications
 * @property list<Shapes\LicenseSpecification>|null $RemoveLicenseSpecifications
 */
class UpdateLicenseSpecificationsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     AddLicenseSpecifications?: list<Shapes\LicenseSpecification>|null,
     *     RemoveLicenseSpecifications?: list<Shapes\LicenseSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
