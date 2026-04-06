<?php

namespace Sunaoka\Aws\Structures\Account;

class AccountClient extends \Aws\Account\AccountClient
{
    use AcceptPrimaryEmailUpdate\AcceptPrimaryEmailUpdateTrait;
    use DeleteAlternateContact\DeleteAlternateContactTrait;
    use DisableRegion\DisableRegionTrait;
    use EnableRegion\EnableRegionTrait;
    use GetAlternateContact\GetAlternateContactTrait;
    use GetContactInformation\GetContactInformationTrait;
    use GetPrimaryEmail\GetPrimaryEmailTrait;
    use GetRegionOptStatus\GetRegionOptStatusTrait;
    use ListRegions\ListRegionsTrait;
    use PutAlternateContact\PutAlternateContactTrait;
    use PutContactInformation\PutContactInformationTrait;
    use StartPrimaryEmailUpdate\StartPrimaryEmailUpdateTrait;
}
