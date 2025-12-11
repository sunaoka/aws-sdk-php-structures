<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\CreateBenefitApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string|null $Name
 * @property string|null $Description
 * @property string $BenefitIdentifier
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property Shapes\Document|null $BenefitApplicationDetails
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $AssociatedResources
 * @property list<Shapes\Contact>|null $PartnerContacts
 * @property list<Shapes\FileInput>|null $FileDetails
 */
class CreateBenefitApplicationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     BenefitIdentifier: string,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     BenefitApplicationDetails?: Shapes\Document|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AssociatedResources?: list<string>|null,
     *     PartnerContacts?: list<Shapes\Contact>|null,
     *     FileDetails?: list<Shapes\FileInput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
