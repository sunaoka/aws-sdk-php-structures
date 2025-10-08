<?php

namespace Sunaoka\Aws\Structures\MedicalImaging;

class MedicalImagingClient extends \Aws\MedicalImaging\MedicalImagingClient
{
    use CopyImageSet\CopyImageSetTrait;
    use CreateDatastore\CreateDatastoreTrait;
    use DeleteDatastore\DeleteDatastoreTrait;
    use DeleteImageSet\DeleteImageSetTrait;
    use GetDICOMImportJob\GetDICOMImportJobTrait;
    use GetDatastore\GetDatastoreTrait;
    use GetImageFrame\GetImageFrameTrait;
    use GetImageSet\GetImageSetTrait;
    use GetImageSetMetadata\GetImageSetMetadataTrait;
    use ListDICOMImportJobs\ListDICOMImportJobsTrait;
    use ListDatastores\ListDatastoresTrait;
    use ListImageSetVersions\ListImageSetVersionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SearchImageSets\SearchImageSetsTrait;
    use StartDICOMImportJob\StartDICOMImportJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateImageSetMetadata\UpdateImageSetMetadataTrait;
}
