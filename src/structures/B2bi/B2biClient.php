<?php

namespace Sunaoka\Aws\Structures\B2bi;

class B2biClient extends \Aws\B2bi\B2biClient
{
    use CreateCapability\CreateCapabilityTrait;
    use CreatePartnership\CreatePartnershipTrait;
    use CreateProfile\CreateProfileTrait;
    use CreateStarterMappingTemplate\CreateStarterMappingTemplateTrait;
    use CreateTransformer\CreateTransformerTrait;
    use DeleteCapability\DeleteCapabilityTrait;
    use DeletePartnership\DeletePartnershipTrait;
    use DeleteProfile\DeleteProfileTrait;
    use DeleteTransformer\DeleteTransformerTrait;
    use GenerateMapping\GenerateMappingTrait;
    use GetCapability\GetCapabilityTrait;
    use GetPartnership\GetPartnershipTrait;
    use GetProfile\GetProfileTrait;
    use GetTransformer\GetTransformerTrait;
    use GetTransformerJob\GetTransformerJobTrait;
    use ListCapabilities\ListCapabilitiesTrait;
    use ListPartnerships\ListPartnershipsTrait;
    use ListProfiles\ListProfilesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTransformers\ListTransformersTrait;
    use StartTransformerJob\StartTransformerJobTrait;
    use TagResource\TagResourceTrait;
    use TestConversion\TestConversionTrait;
    use TestMapping\TestMappingTrait;
    use TestParsing\TestParsingTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCapability\UpdateCapabilityTrait;
    use UpdatePartnership\UpdatePartnershipTrait;
    use UpdateProfile\UpdateProfileTrait;
    use UpdateTransformer\UpdateTransformerTrait;
}
