<?php

namespace Sunaoka\Aws\Structures\Route53Profiles;

class Route53ProfilesClient extends \Aws\Route53Profiles\Route53ProfilesClient
{
    use AssociateProfile\AssociateProfileTrait;
    use AssociateResourceToProfile\AssociateResourceToProfileTrait;
    use CreateProfile\CreateProfileTrait;
    use DeleteProfile\DeleteProfileTrait;
    use DisassociateProfile\DisassociateProfileTrait;
    use DisassociateResourceFromProfile\DisassociateResourceFromProfileTrait;
    use GetProfile\GetProfileTrait;
    use GetProfileAssociation\GetProfileAssociationTrait;
    use GetProfileResourceAssociation\GetProfileResourceAssociationTrait;
    use ListProfileAssociations\ListProfileAssociationsTrait;
    use ListProfileResourceAssociations\ListProfileResourceAssociationsTrait;
    use ListProfiles\ListProfilesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateProfileResourceAssociation\UpdateProfileResourceAssociationTrait;
}
